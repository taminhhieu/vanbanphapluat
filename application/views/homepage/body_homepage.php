<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('includes/head'); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cơ sở dữ liệu pháp luật</title>

 
</head>
<body >
<div id="content-menu-top" >
	<div class="clear"></div>
    <div id="body-wrapper" >
        <div id="body-wrapper-left" ></div>
        <div class="wrapper clearfix" >	
		<div class="ms-webpart-zone ms-fullWidth">
	<div id="MSOZoneCell_WebPartctl00_ctl33_g_acc48a2e_7063_457e_9c1a_1247eda37b19" class="s4-wpcell-plain ms-webpartzone-cell ms-webpart-cell-vertical ms-fullWidth ">
		<div class="ms-webpart-chrome ms-webpart-chrome-vertical ms-webpart-chrome-fullWidth ">
			<div webpartid="acc48a2e-7063-457e-9c1a-1247eda37b19" haspers="false" id="WebPartctl00_ctl33_g_acc48a2e_7063_457e_9c1a_1247eda37b19" width="100%" class="ms-WPBody noindex " allowdelete="false" allowexport="false" style=""><div id="ctl00_ctl33_g_acc48a2e_7063_457e_9c1a_1247eda37b19">			
<div class="search-std" >
    <div class="tit-search" >Tìm kiếm văn bản</div>
    <div id="box-search-std" >
        <input ;onblur="if(this.value=='') this.value='Từ khóa tìm kiếm';" onfocus="if(this.value=='Từ khóa tìm kiếm') this.value='';" value="Từ khóa tìm kiếm" name="Keyword" id="AdvanceKeyword" type="text">
        <div class="clear" ></div>
        <div class="input-search1" >
            <label>
                <input id="oneOrAll" name="stemp" type="radio" value="0" checked="checked"><span>Tất cả từ trên</span></label>
            <label>
                <input name="stemp" type="radio" value="1"><span>Chính xác cụm từ trên</span></label>    
        </div>
        <div class="input-search2" >
            <label>Tìm trong</label>
            <label>
                <input name="stTimTrong" type="radio" value="FulttText" id="idFullText" <span="">Tất cả</label>
            <label>
                <input name="stTimTrong" type="radio" value="Title" id="idSoHieu" <span="">Số hiệu</label>
            <label>
                <input name="stTimTrong" type="radio" checked="checked" value="Title,Title1" id="idTrichYeu" <span="">Số hiệu &amp; trích yếu</label>
        </div>
        <div class="input-search3" >
            <a href="javascript:;" id="btnSearch" class="btn-search" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span>TÌM KIẾM</a>
            <a href="/Pages/timkiem-nangcao.aspx" class="btn-search-adv" aria-hidden="true"></span></a>
        </div>
    </div>
</div>
			</div><div class="ms-clear"></div></div>
		</div><div class="ms-PartSpacingVertical"></div>
	</div><div id="MSOZoneCell_WebPartctl00_ctl33_g_7ec18106_db82_4d83_8176_7f612d6a837d" class="s4-wpcell-plain ms-webpartzone-cell ms-webpart-cell-vertical ms-fullWidth ">
		<div class="ms-webpart-chrome ms-webpart-chrome-vertical ms-webpart-chrome-fullWidth ">
			<div webpartid="7ec18106-db82-4d83-8176-7f612d6a837d" haspers="false" id="WebPartctl00_ctl33_g_7ec18106_db82_4d83_8176_7f612d6a837d" width="100%" class="ms-WPBody noindex " allowdelete="false" allowexport="false" style=""><div id="ctl00_ctl33_g_7ec18106_db82_4d83_8176_7f612d6a837d">
				
<div class="sliders-vbpl">
    <div id="img-hotnews">
        <div class="img-slider" style="background: none 0px 0px repeat scroll rgb(208, 157, 73); display: block;">
            <a href="#">
                <img  id="img" onclick="ChangeImage()" src="https://vbpl.vn/VBQPPL_UserControls/Publishing_portal/Resources/imagesV2/diaphuong.png">
            </a>
        </div>
		<script>
			var index = 1;
			ChangeImage = function(){
				var imgs = ["https://vbpl.vn/VBQPPL_UserControls/Publishing_portal/Resources/imagesV2/diaphuong.png","https://vbpl.vn/VBQPPL_UserControls/Publishing_portal/Resources/imagesV2/gioithieu.png","https://vbpl.vn/VBQPPL_UserControls/Publishing_portal/Resources/imagesV2/tw.png"];
				document.getElementById('img').src = imgs[index];
				index++;
				if(index==3){
					index=0;
				}
			}
			setInterval(ChangeImage,3000);
		</script>
    </div>

    <div id="box-items-hotnews">
        <div class="portlet red">
            <div class=" text-justify">
                <ul id="items-hotnews">
                    <li class=" green">
                        <a class="test1" href="/Pages/gioi-thieu.aspx" class="current" >Giới thiệu</a>
                    </li>
                    <li class=" yellow" > 
                        <a class="test2"href="/TW" class="" >Văn bản pháp luật Trung ương</a>
                    </li>
                    <li class=" blue" >
                        <a class="test3"href="/TW/Pages/danh-sach-dia-phương.aspx" class="" >Văn bản pháp luật địa phương</a>
                    </li>
                </ul>
                <div id="box-items-thongbao" >
                    <marquee id="myMarquee" onmouseout="this.start();" onmouseover="this.stop();" scrollamount="3" scrolldelay="10" behavior="scroll" style="width:375px; display:inline-block; white-space:nowrap;">
                        <ul>                           
                            <li ><a href="/noidung/news/Lists/ThongBao/View_Detail.aspx?ItemID=136" ><i class="fa fa-star" aria-hidden="true" ></i>Thông cáo báo chí văn bản quy phạm pháp luật do Chính phủ, Thủ tướng Chính phủ ban hành trong tháng 8 năm 2021</a></li>                                
                            <li ><a href="/noidung/news/Lists/ThongBao/View_Detail.aspx?ItemID=131" ><i class="fa fa-star" aria-hidden="true" ></i>Thông cáo báo chí văn bản quy phạm pháp luật do Chính phủ, Thủ tướng Chính phủ ban hành trong tháng 9 năm 2020</a></li>                                
                            <li ><a href="/noidung/news/Lists/ThongBao/View_Detail.aspx?ItemID=132" ><i class="fa fa-star" aria-hidden="true" ></i>Thông cáo báo chí văn bản quy phạm pháp luật do Chính phủ, Thủ tướng Chính phủ  ban hành trong tháng 8 năm 2020</a></li>                                
                            <li ><a href="/noidung/news/Lists/ThongBao/View_Detail.aspx?ItemID=133" ><i class="fa fa-star" aria-hidden="true" ></i>Thông cáo báo chí văn bản quy phạm pháp luật do Chính phủ, Thủ tướng Chính phủ ban hành trong tháng 7 năm 2020</a></li>                                
                            <li ><a href="/noidung/news/Lists/ThongBao/View_Detail.aspx?ItemID=128" ><i class="fa fa-star" aria-hidden="true" ></i>Thông cáo báo chí văn bản quy phạm pháp luật do Chính phủ, Thủ tướng Chính phủ ban hành trong tháng 6 năm 2020</a></li>                                
                        </ul>
                    </marquee>
                </div>
            </div>
        </div>
    </div>
</div>
			</div><div class="ms-clear"></div></div>
		</div>
	</div>
</div>	
<div class="sliders-vbpl">
	<menu class="ms-hide" style="display:none">
	    <ie:menuitem id="MSOMenu_Help" iconsrc="/_layouts/15/images/HelpIcon.gif" onmenuclick="MSOWebPartPage_SetNewWindowLocation(MenuWebPart.getAttribute('helpLink'), MenuWebPart.getAttribute('helpMode'))" text="Help" type="option" style="display:none">
	    </ie:menuitem>
    </menu>
</div>
<!-- //content -->
<div class="content">
		<div id="box-banner" >
			<div class="box-banner-advs" >
				<a href="#" style="color: #663399;text-decoration: none;"><img  src="https://vbpl.vn/VBQPPL_UserControls/Publishing_portal/Resources/imagesV2/congbtp.jpg" alt="Cổng thông tin điện tử Bộ tư pháp"></a>
			</div>
			<div class="box-banner-advs" >
				<a href="#" style="color: #663399;text-decoration: none;"><img  src="https://vbpl.vn/VBQPPL_UserControls/Publishing_portal/Resources/imagesV2/congpd.jpg" alt="Cổng thông tin điện tử Pháp điển"></a>
			</div>
			<div class="box-banner-advs" >
				<a href="#" style="color: #663399;text-decoration: none;"><img src="https://vbpl.vn/VBQPPL_UserControls/Publishing_portal/Resources/imagesV2/csdltthc.jpg" alt="Cơ sở dữ liệu thủ tục hành chính"></a>
			</div>
		</div>
		<div class="content-box-news" >
			<div class="box-news-home" >
			<div class="ms-webpart-zone ms-fullWidth" >
	<div style="margin: auto !important;" id="MSOZoneCell_WebPartctl00_ctl33_g_0580702e_928d_4145_bc1b_b7cb3bc491b2" class="s4-wpcell-plain ms-webpartzone-cell ms-webpart-cell-vertical ms-fullWidth ">
		<div class="ms-webpart-chrome ms-webpart-chrome-vertical ms-webpart-chrome-fullWidth ">
			<div webpartid="0580702e-928d-4145-bc1b-b7cb3bc491b2" haspers="false" id="WebPartctl00_ctl33_g_0580702e_928d_4145_bc1b_b7cb3bc491b2" width="100%" class="ms-WPBody noindex " allowdelete="false" allowexport="false" style=""><div id="ctl00_ctl33_g_0580702e_928d_4145_bc1b_b7cb3bc491b2">
				
<div class="box-title-news">
	<?= $title_category; ?>
</div>
<div class="content-news" >
    <ul >       
         <li >
            <i class="fa fa-file-o" aria-hidden="true" ></i>
            <a href="/phutho/Pages/vbpq-toanvan.aspx?ItemID=153161" >Nghị định 96/2021/NĐ-CP Nghị định về công tác bảo đảm chuyến bay chuyên cơ, chuyên khoang</a>
        </li>       
         <li>
            <i class="fa fa-file-o" aria-hidden="true"></i>
            <a href="/bogiaothong/Pages/vbpq-toanvan.aspx?ItemID=153569">Quyết định 18/2022/QĐ-UBND Ban hành Quy chế quản lý vật liệu nổ công nghiệp, tiền chất thuốc nổ trên địa bàn tỉnh Lai Châu</a>
        </li>        
         <li>
            <i class="fa fa-file-o" aria-hidden="true"></i>
            <a href="/bacninh/Pages/vbpq-toanvan.aspx?ItemID=153874">Quyết định Số 08/2022/QĐ-UBND Bãi bỏ Quyết định số 15/2016/QĐ-UBND ngày 27 tháng 7 năm 2016 của Ủy ban nhân dân tỉnh Bạc Liêu ban hành tiêu chí cánh đồng lớn trong lĩnh vực trồng trọt trên địa bàn tỉnh Bạc Liêu</a>
        </li>        
        <li>
            <i class="fa fa-file-o" aria-hidden="true"></i>
            <a href="/haiphong/Pages/vbpq-van-ban-goc.aspx?ItemID=153869">Quyết định 13/2022/QĐ-UBND Sửa đổi, bổ sung Điều 12 Quy định phân cấp quản lý, sử dụng tài sản công trên địa bàn tỉnh Cao Bằng ban hành kèm theo Quyết định số 32/2018/QĐ-UBND ngày 19 tháng 10 năm 2018 của Ủy ban nhân dân tỉnh Cao Bằng</a>
        </li>                
    </ul>
</div>

			</div><div class="ms-clear"></div></div>
		</div>
	</div>
</div>
			</div>
			<div class="box-news-home" >
			<div class="ms-webpart-zone ms-fullWidth">
	<div id="MSOZoneCell_WebPartctl00_ctl33_g_10bb4902_7d8e_432d_8c77_7975298ece5d" class="s4-wpcell-plain ms-webpartzone-cell ms-webpart-cell-vertical ms-fullWidth ">
		<div class="ms-webpart-chrome ms-webpart-chrome-vertical ms-webpart-chrome-fullWidth ">
			<div webpartid="10bb4902-7d8e-432d-8c77-7975298ece5d" haspers="false" id="WebPartctl00_ctl33_g_10bb4902_7d8e_432d_8c77_7975298ece5d" width="100%" class="ms-WPBody noindex " allowdelete="false" allowexport="false" style=""><div id="ctl00_ctl33_g_10bb4902_7d8e_432d_8c77_7975298ece5d">
				
<!-- Tin Tức -->
<div class="box-title-news"><a href="/noidung/news/Lists/ThongBao/View_Detail.aspx" style="color:#663399;text-decoration: none;outline: none;font: bold 16px arial;">Tin tức</a></div>
				<div class="content-news" >
					<ul >                       
						<li >
							<i class="fa fa-file-o" aria-hidden="true" ></i>
							<a href="/noidung/news/Lists/ThongBao/View_Detail.aspx?ItemID=136">Thông cáo báo chí văn bản quy phạm pháp luật do Chính phủ, Thủ tướng Chính phủ ban hành trong tháng 8 năm 2021</a>
						</li>                       
						<li>
							<i class="fa fa-file-o" aria-hidden="true"></i>
							<a href="/noidung/news/Lists/ThongBao/View_Detail.aspx?ItemID=131">Thông cáo báo chí văn bản quy phạm pháp luật do Chính phủ, Thủ tướng Chính phủ ban hành trong tháng 9 năm 2020</a>
						</li>                       
						<li>
							<i class="fa fa-file-o" aria-hidden="true"></i>
							<a href="/noidung/news/Lists/ThongBao/View_Detail.aspx?ItemID=132">Thông cáo báo chí văn bản quy phạm pháp luật do Chính phủ, Thủ tướng Chính phủ  ban hành trong tháng 8 năm 2020</a>
						</li>                       
						<li>
							<i class="fa fa-file-o" aria-hidden="true"></i>
							<a href="/noidung/news/Lists/ThongBao/View_Detail.aspx?ItemID=133">Thông cáo báo chí văn bản quy phạm pháp luật do Chính phủ, Thủ tướng Chính phủ ban hành trong tháng 7 năm 2020</a>
						</li>                       
						<li>
							<i class="fa fa-file-o" aria-hidden="true"></i>
							<a href="/noidung/news/Lists/ThongBao/View_Detail.aspx?ItemID=128">Thông cáo báo chí văn bản quy phạm pháp luật do Chính phủ, Thủ tướng Chính phủ ban hành trong tháng 6 năm 2020</a>
						</li>                       
					</ul>
				</div>
			</div><div class="ms-clear"></div></div>
		</div>
	</div>
</div>
			</div>
			<div class="box-news-home" >
			<div class="ms-webpart-zone ms-fullWidth">
	<div id="MSOZoneCell_WebPartctl00_ctl33_g_a9aa6858_00f5_4441_bc05_0dc6dce7beb5" class="s4-wpcell-plain ms-webpartzone-cell ms-webpart-cell-vertical ms-fullWidth ">
		<div class="ms-webpart-chrome ms-webpart-chrome-vertical ms-webpart-chrome-fullWidth ">
			<div webpartid="a9aa6858-00f5-4441-bc05-0dc6dce7beb5" haspers="false" id="WebPartctl00_ctl33_g_a9aa6858_00f5_4441_bc05_0dc6dce7beb5" width="100%" class="ms-WPBody noindex " allowdelete="false" allowexport="false" style=""><div id="ctl00_ctl33_g_a9aa6858_00f5_4441_bc05_0dc6dce7beb5">
				
<div class="box-title-news"><a href="/Pages/hoidap.aspx" >Tình huống pháp luật</a></div>
				<div class="content-news" >
					<ul >                         
						<li >
							<i class="fa fa-file-o" aria-hidden="true" ></i>
							<a href="/Pages/chitiethoidap.aspx?ItemID=86945">Điều kiện thực hiện yêu cầu trợ giúp pháp lý?</a>
						</li>						 
						<li>
							<i class="fa fa-file-o" aria-hidden="true"></i>
							<a href="/Pages/chitiethoidap.aspx?ItemID=86946">Thủ tục rút yêu cầu trợ giúp pháp lý</a>
						</li>						 
						<li>
							<i class="fa fa-file-o" aria-hidden="true"></i>
							<a href="/Pages/chitiethoidap.aspx?ItemID=86947">Luật sư muốn được lựa chọn, ký hợp đồng với Trung tâm trợ giúp pháp lý cần thực thực hiện thủ tục gì?</a>
						</li>						 
						<li>
							<i class="fa fa-file-o" aria-hidden="true"></i>
							<a href="/Pages/chitiethoidap.aspx?ItemID=86948">Hồ sơ đề nghị tham gia lựa chọn ký hợp đồng thực hiện trợ giúp pháp lý của luật sư</a>
						</li>						 
						<li>
							<i class="fa fa-file-o" aria-hidden="true"></i>
							<a href="/Pages/chitiethoidap.aspx?ItemID=86949">Điều kiện để luật sư tham gia lựa chọn ký hợp đồng thực hiện trợ giúp pháp lý</a>
						</li>						 
						<li>
							<i class="fa fa-file-o" aria-hidden="true"></i>
							<a href="/Pages/chitiethoidap.aspx?ItemID=86950">Tổ chức hành nghề luật sư, tổ chức tư vấn pháp luật để được tham gia lựa chọn, ký hợp đồng với Sở Tư pháp cần thực hiện những thủ tục gì?</a>
						</li>						
					</ul>
				</div>
			</div><div class="ms-clear"></div></div>
		</div>
	</div>
</div>
			</div>
		</div>
	</div>                           
                        </div>
                        <div id="body-wrapper-right" style="width: 174.5px;">
                        </div>
                    </div>
</div>
</body>
</html>
