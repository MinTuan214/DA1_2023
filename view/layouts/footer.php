<footer>
            <div class="container-footer">
                <div class="noidung-footer">
                    <h4 class="noidung-big">Về chúng tôi</h4>
                    <p class="noidung-small">Web Du Lịch Đà Nẵng
                        <i>“Khám phá vẻ đẹp vô tận của Đà Nẵng
                        Discover the endless beauty of Da Nang”</i>
                        https://webdulichdanang.com</p>
                    <h4 class="noidung-big">Thông tin</h4>
                    <p class="phone"><i class="fa-solid fa-phone-volume"></i> 0354.423.372</p>
                    <p class="email"><i class="fa-solid fa-envelope"></i> minhtuan214@gmail.com</p>
                </div>
                <div class="footer-small">
                    <div class="noidung-footer_small">
                        <h4>Mục lục</h4>
                    </div>
                    <ul>
                        <li class="trans">Blog</li>
                        <li>Tours</li>
                        <li>Khách sạn</li>
                        <li>Combo Đà Nẵng</li>
                        <li>Bản đồ</li>
                        <li>Liên hệ</li>
                    </ul>
                </div>

                <div class="footer-small">
                    <div class="noidung-footer_small">
                        <h4>Khám phá</h4>
                    </div>
                    <ul>
                        <li>Điểm đến Đà Nẵng</li>
                        <li>Ẩm thực Đà Nẵng</li>
                        <li>Kinh nghiệm Đà Nẵng</li>
                        <li>Dịch vụ Đà Nẵng</li>
                        <li>Lễ hội Đà Nẵng</li>
                        <li>Tin tức Đà Nẵng</li>
                    </ul>
                </div>

                <div class="footer-small">
                    <div class="noidung-footer_small">
                        <h4>LIÊN KẾT</h4>
                    </div>
                    <ul>
                        <li>Du Lịch Miền Trung</li>
                        <li>Du Lịch Hội An</li>
                        <li>Du Lịch Huế</li>
                        <li>Daily Tour</li>
                        <li>Justgo Vietnam</li>
                        <li>Hue Daily Tour</li>
                    </ul>
                </div>
            </div>
            <div class="hr2">

            </div>
            <div class="list-icons">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-google"></i>
                <i class="fa-solid fa-camera-retro"></i>
                <i class="fa-brands fa-pinterest"></i>
                <i class="fa-brands fa-youtube"></i>
            </div>
            <div class="end">
                <p>© Travel Phát triển bởi <span>Hoàng Minh Tuấn</span></p>
            </div>
        </footer>


    </div>
    <script src="../javascrip/script.js"></script>
   
    <script>
           $(document).ready(function(){
            $(window).scroll(function(){
                if ($(this).scrollTop()){
                    $('.container-header').addClass('sticky');
                }else{
                    $('.container-header').removeClass('sticky');
                }
            });
        });
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel();
            });


            $(document).ready(function() {
    $("#datepicker").datepicker({
        dateFormat: "dd/mm/yy",
        changeYear: true,
        changeMonth: true,
        yearRange: "1900:2030"
    });
});


function previewImage(input) {
        var preview = document.getElementById('imagePreview');
        var file = input.files[0];
        var reader = new FileReader();

        reader.onloadend = function () {
            preview.innerHTML = '<img src="' + reader.result + '" alt="" width="70px" height="70px">';
        };

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.innerHTML = '<img src="../images/avt.png" alt="" width="70px" height="70px">';
        }
    }
    </script>
</body>
</html>