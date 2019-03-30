<?php include 'public/inc/head.php'; ?>
<?php include 'public/inc/sidebar.php'; ?>

<div class="main-panel">
  <?php include 'public/inc/navbar.php'; ?>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">book</i>
              </div>
              <p class="card-category">Meus cultos</p>
              <h3 class="card-title">2/53
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">list</i>
                <a href="#pablo">Ver todos</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="material-icons">info_outline</i>
              </div>
              <p class="card-category">Meus murais</p>
              <h3 class="card-title">3</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">notification_important</i>
                Leia sempre suas mensagens no mural!
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6" onclick="alert()">
          <div class="card card-stats bg-success">
            <div class="card-header card-header-bdn card-header-icon" style="height: 130px;">
              <div class="card-icon">
                <i class="material-icons">add</i>
              </div>
              <p class="card-category text-light">Cadastrar</p>
              <h3 class="card-title text-light">novo culto</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="card">
            <div class="card-header card-header-tabs card-header-bdn">
              <div class="nav-tabs-navigation">
                <div class="nav-tabs-wrapper">
                  <h4 class="card-title">Meus lembretes
                    <a href="#" class="pull-right m-0" style="font-size: 28px;"><b>+</b></a>
                  </h4>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane active" id="profile">
                  <div class="row">
                    <div class="col-xl-4 col-md-6 col-sm-12">
                      <div class="card mb-2 mt-2 bg-info">
                        <div class="card-body">
                          <h4>Titudo do postit</h4>
                          <p>Conteudo do postit</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                      <div class="card mb-2 mt-2 bg-rose">
                        <div class="card-body">
                          <h4>Titudo do postit</h4>
                          <p>Conteudo do postit</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                      <div class="card mb-2 mt-2 bg-primary">
                        <div class="card-body">
                          <h4>Titudo do postit</h4>
                          <p>Conteudo do postit</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                      <div class="card mb-2 mt-2 bg-success">
                        <div class="card-body">
                          <h4>Titudo do postit</h4>
                          <p class="mt-0">Conteudo do postit</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="card">
            <div class="card-header card-header-bdn">
              <h4 class="card-title">Mural de avisos</h4>
            </div>
            <div class="card-body table-responsive">
              <div class="row">
                <div class="col-12">
                  <div class="card mt-2 mb-2 bg-danger">
                    <div class="card-body">
                      <h5 class="card-category card-category-social">
                        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                        Titulo do mural
                      </h5>
                      <h4 class="card-title">
                        <span>Texto do mural</span>
                      </h4>
                      <div class="card-stats">
                        <div class="author">
                          <a href="#pablo">
                            <span>Alisson Pelizaro</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="card mt-2 mb-2 bg-info">
                    <div class="card-body">
                      <h5 class="card-category card-category-social">
                        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                        Titulo do mural
                      </h5>
                      <h4 class="card-title">
                        <span>Texto do mural</span>
                      </h4>
                      <div class="card-stats">
                        <div class="author">
                          <a href="#pablo">
                            <span>Alisson Pelizaro</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="card mt-2 mb-2 bg-success">
                    <div class="card-body">
                      <h5 class="card-category card-category-social">
                        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                        Titulo do mural
                      </h5>
                      <h4 class="card-title">
                        <span>Texto do mural</span>
                      </h4>
                      <div class="card-stats">
                        <div class="author">
                          <a href="#pablo">
                            <span>Alisson Pelizaro</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'public/inc/footer.php'; ?>
</div>
<?php include 'public/inc/scripts.php'; ?>
<script>
</script>
</body>

</html>
