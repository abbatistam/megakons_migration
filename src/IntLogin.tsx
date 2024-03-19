function IntLogin() {
    return (
        <>
        <div className="hold-transition login-page">
            <div className="login-box">
    <img className="img-responsive" alt="logo" src="img/logo.png" />
  <div className="card">
    <div className="card-body login-card-body">
      <p className="login-box-msg">Administracion|Intranet</p>

      <form action="intranet.php" method="post">
        <div className="input-group mb-3">
          <input type="email" className="form-control" placeholder="Email" />
          <div className="input-group-append">
            <div className="input-group-text">
              <span className="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div className="input-group mb-3">
          <input type="password" className="form-control" placeholder="Password" />
          <div className="input-group-append">
            <div className="input-group-text">
              <span className="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div className="row">
          <div className="col-8">
          </div><div className="col-4">
            <button type="submit" className="btn btn-danger btn-block">Sign In</button>
          </div>
          </div>
      </form>

      </div>
    </div>
</div>
</div>
        </>
    )
}

export default IntLogin