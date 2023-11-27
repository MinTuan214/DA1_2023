
</body>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    // Lấy tham chiếu đến checkbox "Chọn tất cả"
    var selectAllCheckbox = document.getElementById("selectAllCheckbox");

    // Lấy danh sách các checkbox khác để chọn/deselect
    var otherCheckboxes = document.querySelectorAll(".dsbl input[type='checkbox']");

    // Thêm sự kiện khi checkbox "Chọn tất cả" được click
    selectAllCheckbox.addEventListener("click", function () {
        // Lặp qua danh sách các checkbox khác và đặt trạng thái chúng giống với checkbox "Chọn tất cả"
        for (var i = 0; i < otherCheckboxes.length; i++) {
            otherCheckboxes[i].checked = selectAllCheckbox.checked;
        }
    });
});
</script>
</html>