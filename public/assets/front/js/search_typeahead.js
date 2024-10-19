$(document).ready(function () {
    var searchEngine = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace("name"),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        remote: {
            url: "https://phimapi.com/v1/api/tim-kiem?keyword=%QUERY",
            wildcard: "%QUERY",
            transform: function (response) {
                $(".fa-search").show();
                $(".loading-spinner").hide();

                if (
                    response.status === "success" &&
                    response.data &&
                    response.data.items
                ) {
                    response.data.APP_DOMAIN_CDN_IMAGE =
                        response.data.APP_DOMAIN_CDN_IMAGE || "";
                    return response.data.items.map(function (item) {
                        item.thumb_url_full =
                            response.data.APP_DOMAIN_CDN_IMAGE +
                            "/" +
                            item.thumb_url;
                        return item;
                    });
                }
                return [];
            },
        },
    });

    $(".search-box").typeahead(
        {
            hint: true,
            highlight: true,
            minLength: 1,
        },
        {
            name: "search-results",
            display: "name",
            source: searchEngine,
            templates: {
                suggestion: function (data) {
                    return `
                    <div class="film-suggestion d-flex align-items-center">
                        <a href="${data.slug}">
                            <img src="${data.thumb_url_full}" alt="${data.name}" style="width:50px; height:50px; margin-right: 10px;">
                        </a>
                        <div class="flex-col text-left mt-2">
                            <a href="${data.slug}" class="film-name">${data.name}</a>
                            <p class="film-quality">${data.quality} - ${data.lang}</p>
                        </div>
                    </div>`;
                },
                empty: ['<div class="empty-message">No film found</div>'].join(
                    "\n"
                ),
            },
        }
    );

    $(document).on("ajaxStart", function () {
        $(".fa-search").hide();
        $(".loading-spinner").show();
    });

    $(document).on("ajaxStop", function () {
        $(".fa-search").show();
        $(".loading-spinner").hide();
    });
});
