const body = document.querySelector("body"),
      modeToggle = body.querySelector(".mode-toggle");
      sidebar = body.querySelector("nav");
      sidebarToggle = body.querySelector(".sidebar-toggle");

let getMode = localStorage.getItem("mode");

let getStatus = localStorage.getItem("status");
if(getStatus && getStatus ==="close"){
    sidebar.classList.toggle("close");
}

sidebarToggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    if(sidebar.classList.contains("close")){
        localStorage.setItem("status", "close");
    }else{
        localStorage.setItem("status", "open");
    }
})


// var inputs = document.querySelectorAll( '.inputfile' );
// Array.prototype.forEach.call( inputs, function( input )
// {
// 	var label	 = input.nextElementSibling,
// 		labelVal = label.innerHTML;

// 	input.addEventListener( 'change', function( e )
// 	{
// 		var fileName = '';
// 		if( this.files && this.files.length > 1 )
// 			fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
// 		else
// 			fileName = e.target.value.split( '\\' ).pop();

// 		if( fileName )
// 			label.querySelector( 'span' ).innerHTML = fileName;
// 		else
// 			label.innerHTML = labelVal;
// 	});
// });


function previewImage(input) {
    var preview = document.getElementById('imagePreview');
    var files = input.files;

    if (files.length > 0) {
        var reader = new FileReader();

        reader.onload = function (e) {
            var img = document.createElement("img");
            img.src = e.target.result;
            img.height = 200; 

            // Xóa hình ảnh cũ (nếu có) và thêm hình mới
            while (preview.firstChild) {
                preview.removeChild(preview.firstChild);
            }

            preview.appendChild(img);
        };

        reader.readAsDataURL(files[0]);
    } else {
        // Xóa hình ảnh nếu không có tệp được chọn
        while (preview.firstChild) {
            preview.removeChild(preview.firstChild);
        }
    }
}


