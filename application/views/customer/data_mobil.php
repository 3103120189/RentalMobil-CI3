 <!-- Page Content -->
 <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Lorem ipsum dolor sit amet</h4>
              <h2>Fleet</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
      <?php echo $this->session->flashdata('pesan')?>
        <div class="row">
        <?php foreach($mobil as $mb) :?>
          <div class="col-md-4">
            <div class="product-item">
              <img src="<?php echo base_url('assets/upload/'.$mb->gambar)?>" alt="">

              <div class="down-content">
                <h4><?php echo $mb->merk?></h4>

                <h6>Rp. <?php echo number_format($mb->harga,0,',','.')?> / Hari</h6>

                

                <ul class="car-info-list">
                    <li><?php 
                        if($mb->ac == "1"){
                            echo "<i class='fa fa-check-square text-warning ml-2'></i>";
                        }else{
                            echo"<i class='fa fa-times-circle text-danger'></i>";
                        }
                               
                    ?>AC   |</li>
                    <li><?php 
                        if($mb->supir == "1"){
                            echo "<i class='fa fa-check-square text-warning ml-2'></i>";
                        }else{
                            echo"<i class='fa fa-times-circle text-danger'></i>";
                        }
                               
                    ?>Supir   |</li>
                    <li><?php 
                        if($mb->mp3_player == "1"){
                            echo "<i class='fa fa-check-square text-warning ml-2'></i>";
                        }else{
                            echo"<i class='fa fa-times-circle text-danger'></i>";
                        }
                               
                    ?>MP3 Player   |</li>
                    <li><?php 
                        if($mb->central_lock == "1"){
                            echo "<i class='fa fa-check-square text-warning ml-2'></i>";
                        }else{
                            echo"<i class='fa fa-times-circle text-danger'></i>";
                        }
                               
                    ?>Central Lock   |</li>
                    
                </ul>

                <?php
                  if($mb->status == "1"){
                    echo anchor('customer/rental/tambah_rental/'.$mb->id_mobil,'<span class="btn btn-light">Rental</span>');
                  }else{
                    echo "<span class='btn btn-warning'>Tidak Terserdia</span>";
                  }
                
                ?>
                    
                    <a href="<?php echo base_url('customer/data_mobil/detail_mobil/'.$mb->id_mobil)?>" class="btn btn-warning ml-2 mt-2">Detail Mobil</a>
                
              </div>
            </div>
          </div>
        <?php endforeach;?>
        </div>
      </div>
    </div>