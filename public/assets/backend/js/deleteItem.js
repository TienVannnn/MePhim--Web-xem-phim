function confirmation(id) {
    Swal.fire({
        title: "Bạn có chắc chắn muốn xóa?",
        text: "Không thể hoàn tác sau khi xóa!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Có, xóa nó!",
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById("delete-form-" + id).submit();
        }
    });
}
