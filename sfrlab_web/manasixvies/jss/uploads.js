var uploader = new plupload.Uploader({
    runtimes: 'gears,html5,html4,silverlight,flash',
    browse_button: 'cover_btn_big',
    url: "ajax.php?action=upload",
    flash_swf_url: 'jss/plupload/Moxie.swf',
    silverlight_xap_url: 'jss/plupload/Moxie.xap',
    filters: {
        max_file_size: '25mb',
        mime_types: [
            {title: "files", extensions: "jpg,png,gif,jpeg,zip,mp4"}
        ]
    },
    multi_selection: true,
    init: {
        FilesAdded: function(up, files) {
            $("#btn_submit").attr("disabled", "disabled").addClass("disabled").val("正在上传...");
            var item = '';
            plupload.each(files, function(file) { //遍历文件
                item += "<span class='item' id='" + file['id'] + "'><span class='progress_bar'><span class='bar'></span><span class='percent'>0%</span></span></span>";
            });
            $("#photos_area").prepend(item);
            uploader.start();
        },
        UploadProgress: function(up, file) { //上传中，显示进度条 
            var percent = file.percent;
            $("#" + file.id).find('.bar').css({"width": percent + "%"});
            $("#" + file.id).find(".percent").text(percent + "%");
        },
        FileUploaded: function(up, file, info) {
            var data = eval("(" + info.response + ")");
            $("#" + file.id).html("<a class='picture_delete'>×</a><input type=hidden name='pics[]' value='" + data.src + "'><img src='" + data.src + "' alt='" + data.name + "'>")

            $("#btn_submit").removeAttr("disabled").removeClass("disabled").val("提 交");
            if (data.error != 0) {
                alert(data.error);
            }
        },
        Error: function(up, err) {
            if (err.code == -601) {
                alert("请上传jpg,png,gif,jpeg,zip或rar！");
                $("#btn_submit").removeAttr("disabled").removeClass("disabled").val("提 交");
            }
        }
    }
});
uploader.init();
//删除图片
$(function() {
    $("body").on("click", ".picture_delete", function() {
        $(this).parent(".item").remove();
		getPicsUrl() ;//删除的时候重新改收地址的文本框
    });
})
function show_pics_box() {
    $("#modal_upload").modal();
}
function upload_complete() {
    var item = "";
    $("#photos_area").find(".item").each(function() {
        var src = $(this).find("img").attr("src");
        item += "<li class='item'><a href='" + src + "' target='_blank'><img src='" + src + "'/><a class='picture_delete'>×</a></a></li>";
    })
    $("#ul_pics").prepend(item);
    $("#modal_upload").modal('hide');
    $("#photos_area").find(".item").remove();
    $("#pic_url").val('');
	
	getPicsUrl() ;
}
function getPicUrl() {
    var pic_url = $('#pic_url').val();
    if (pic_url == '') {
        alert("请输入图片地址");
        return false;
    }
    if (!/\.(gif|jpg|jpeg|png|GIF|JPG|PNG|mp4)$/.test(pic_url)) {
        alert("图片类型必须是.gif,jpeg,jpg,png中的一种")
        return false;
    }
    $.post("ajax.php?action=getPicUrl", {pic_url: pic_url}, function(data) {
        if (data.error == 0) {
            var src = data.src;
            var item = "<li class='item'><a href='" + src + "' target='_blank'><img src='" + src + "'/><a class='picture_delete'>×</a></a></li>";
            $("#ul_pics").prepend(item);
            $("#modal_upload").modal('hide');
            $("#photos_area").find(".item").remove();
            $("#pic_url").val('');
        } else {
            alert(data.error);
        }
    }, "json")
}

function getPicsUrl() {
    var item = "";
    if ($("#ul_pics").children(".item").length > 1) {
        $("#ul_pics").children(".item").each(function() {
            var src = $(this).find("img").attr("src");
            if (src != undefined) {
				if(item==''){
					item += src;
					$("#product_logo").attr("value",item);//获取第一张图片作为封面
					}else{
                item += ','+src;}
            }

        })
    }
	$("#product_album").attr("value",item);//获取所有缩率图
	 
  //  alert(item);
}