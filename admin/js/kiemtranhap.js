$(document).ready(function() {

        //Kiểm tra nhập các trường thêm sản phẩm và hiển thị ra thông báo!
        $("#formThem").validate({
            rules: {
                tendiadiem: "required",
                diachi: "required",
                lat: "required",
                lng: "required",
            },

            messages: {
                tendiadiem: " Vui lòng nhập tên địa điểm",
                diachi: "Vui lòng nhập địa chỉ",
                lat: "Vui lòng nhập lat",
                lng: "Vui lòng nhập lng",
            }
        });
    });