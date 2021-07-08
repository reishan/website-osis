<!-- Main Content -->
<div class="main-content">
     <section class="section">
          <div class="section-header">
               <h1><?= $title ?></h1>
          </div>
          <div class="row justify-content-center">
               <div class="col-12 col-md-6 col-lg-8">
                    <div class="card">
                         <div class="card-header">
                              <h4>Tambah Kategori Artikel</h4>
                         </div>
                         <div class="card-body">
                              <form action="<?= base_url('kategori/kategori_aksi') ?>" method="POST">
                                   <div class="form-group">
                                        <label for="nama_kategori">Kategori *</label>
                                        <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="<?= set_value('nama_kategori'); ?>" autocomplete="off" autofocus>
                                        <?= form_error('nama_kategori', '<small class="text-danger">', '</small>'); ?>
                                   </div>
                                   <div class="card-footer text-right">
                                        <a href="<?= base_url() ?>kategori" class="btn btn-warning mr-2">Kembali</a>
                                        <button class="btn btn-primary">Submit</button>
                                   </div>
                              </form>
                         </div>
                    </div>
               </div>
     </section>
</div>