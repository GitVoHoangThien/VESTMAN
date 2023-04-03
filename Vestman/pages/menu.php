<?php
	$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
	$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	    		
?>
<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangky']);
	} 
?>

<section class="top">
        <div class="container">
            <div class="row">
                
                <!-- ----------Logo---------- -->
                <div class="top-logo">
                    <a href="index.php"> <img src="IMAGES/logovestman.png" alt=""> </a>
				</div>
                <!-- ----------Menu lớn---------- -->
                <div class="top-menu-items">
                    

                        <!-- ----------Giới thiệu---------- -->
                        <li> <a href="index.php?quanly=introduce">GIỚI THIỆU</a>
                            <!-- <ul class="top-menu-item">
                                <li> <a href="">VỀ CHÚNG TÔI</a> </li>
                                <li> <a href="">LIÊN HỆ</a> </li>
                            </ul> -->
                        </li>

                        <!-- ----------DANH MỤC SẢN PHẨM---------- -->
                        <li> <a href="#">SẢN PHẨM</a>
                            <ul class="top-menu-item">
								<?php 
									while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
								?>
								<li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a></li>
								
                                <?php
								} 
								?> 
                                
                            </ul>
                        </li>

                        <!-- ----------DANH MỤC PHỤ KIỆN---------- -->
                        <!-- <li> <a href="cartegory.php">PHỤ KIỆN </a>
                            <ul class="top-menu-item">
                                <li> <a href="cartegory.php">ĐỒNG HỒ NAM</a> </li>
                                <li> <a href="cartegory.php">CÀ VẠT NAM</a> </li>
                                <li> <a href="cartegory.php">THẮT LƯNG NAM</a> </li>
                            </ul>
                        </li> -->

                        <!-- ----------GÓC ĐÀN ÔNG---------- -->
                        <li> <a href="index.php?quanly=tintuc">GÓC ĐÀN ÔNG</a></li>
                        
                        <!-- ----------ƯU ĐÃI---------- -->
                        <li> <a href="#" style="color: red"> ƯU ĐÃI CHO BẠN </a>
                        
                    
                </div>

                <!-- ----------Tìm kiếm---------- -->
                <div class="top-menu-icons">       
                        <li>
                            <form action="index.php?quanly=timkiem" method="POST">        
                                    <input type="text" placeholder="Tìm kiếm" name="tukhoa">
                                    <a>
                                        <i class="">
                                            <input type="submit" name="timkiem" value="Tìm">
                                        </i>
                                    </a>

                                    <!-- <i class="fas fa-search"></i>
                                    <input type="submit" name="timkiem" value="Tìm kiếm">
                                    </a> -->
                            </form>         
                        </li>

                        <li>
							<a href="index.php?quanly=giohang">
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                        </li>
                        
                        <li>
							<a href="index.php?quanly=dangky">
								<i class="fas fa-user-secret"></i>

								<?php
								    if(isset($_SESSION['dangky'])){ 
								?>

								    <li>
                                        <a href="index.php?dangxuat=1">
                                            <i class="fas fa-sign-out-alt"></i>
                                        </a>
                                    </li>

								    <li>
                                        <a href="index.php?quanly=thaydoimatkhau">
                                            <i class="fas fa-key"></i>
                                        </a>
                                    </li>
                                    
                                

                            </a>

                            
                        </li>
                </div>

            </div>
            
        </div>
        <a style="">
        <div style="font-size:0px;">
                            <?php
                                    header('Location:index.php');
								}else{ 
								?>
								<?php
								} 
								?>
                            </a>
                            </div>
</section>


<!-- <section class="slider owl-carousel owl-theme">
        <div class="slider-item slider-item-one">
        </div>
</section> -->
