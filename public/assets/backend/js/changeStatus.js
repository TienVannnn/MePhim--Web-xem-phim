$(document).ready(function () {
    $(".changeStatus").click(function (e) {
        e.preventDefault();
        var id = $(this).data("id");
        var slug = $(this).data("slug");
        var routeChangeStatus = route("reusable.changeStatus", {
            id: id,
            slug: slug,
        });

        $.ajax({
            type: "POST",
            dataType: "JSON",
            data: { id },
            url: routeChangeStatus,
            success: function (res) {
                toastr.success(res.message, "Thành công");
                var statusElement = $(this);
                if (statusElement.text().trim() === "No") {
                    statusElement.text("Yes");
                    statusElement
                        .removeClass("btn-danger")
                        .addClass("btn-success");
                } else {
                    statusElement.text("No");
                    statusElement
                        .removeClass("btn-success")
                        .addClass("btn-danger");
                }
            }.bind(this),
            error: function (err) {
                toastr.error(
                    err.responseJSON.message || "Đã xảy ra lỗi",
                    "Thất bại"
                );
            },
        });
    });
});
