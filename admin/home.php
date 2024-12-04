<style>
  #system-cover{
    width:100%;
    height:35em;
    object-fit:cover;
    object-position:center center;
  }
</style>
<h1 class="">Welcome, <?php echo $_settings->userdata('firstname')." ".$_settings->userdata('lastname') ?>!</h1>
<hr>
<div class="row">
  <div class="col-12 col-sm-3 col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-gradient-primary elevation-1"><i class="fas fa-user"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Currrent Inmates</span>
        </span>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-3 col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-gradient-success elevation-1"><i class="fa fa-archive"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Released Inmates</span>
        </span>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-3 col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-gradient-warning elevation-1"><i class="fas fa-file-alt"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Today's Visits</span>
        </span>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-3 col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-gradient-success elevation-1"><i class="fa-regular fas fa-bars"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Prison List</span>
        </span>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-3 col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-gradient-navy elevation-1"><i class="fas fa-border-all"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Cell Block</span>
      </div>
    </div>
  </div>
   <div class="col-12 col-sm-3 col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-gradient-dark elevation-1"><i class="fas fa-list"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Crimes</span>
      </div>
    </div>
  </div> 
  <div class="col-12 col-sm-3 col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-gradient-navy elevation-1"><i class="fas fa-bars"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Actions</span>
        </span>
      </div>
    </div>
  </div>
</div>
