import { useNavigate } from "react-router-dom";

function Login () {

    const navigate = useNavigate()
    function handleClick(route:string) {
        navigate(route);
    }


    return (
        <>
           <section className="login-wrapper">
            <div className="container">
                <div className="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">
                    <form>
                        <img className="img-responsive" alt="logo" src="img/logo.png" />
                        <h6>Acceso a Postulantes</h6>
                        <input type="text" className="form-control input-lg" placeholder="Email" />
                        <input type="password" className="form-control input-lg" placeholder="Password" />
                        <label><a href="">Olvidaste la contraseña?</a></label>
                        <button type="submit" className="btn btn-primary">Ingresar</button>
                        <p>No tienes cuenta <a className="navItems" onClick={() => handleClick('/register')}>Crear cuenta</a></p>
                    </form>
                </div>
            </div>
        </section>
        </>
    )


}

export default Login