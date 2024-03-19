import {useNavigate} from 'react-router-dom'

function Header() {

    const navigate = useNavigate()
    const customStyle = {
        display: 'none', 
        opacity: '1'
    }

    function handleClick(route:string) {
        navigate(route);
    }

  /*  useEffect(() => {
        // Cargar bootsnav.js
        $.getScript('/public/js/bootsnav.js', () => {
         });
      }, []);*/

  return (
    <>
      <nav className="navbar navbar-default navbar-sticky bootsnav">
            <div className="container">      
                <div className="navbar-header">
                    <button type="button" className="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i className="fa fa-bars"></i>
                    </button>
                    <a className="navbar-brand" href="index.php"><img src="/public/img/logo.png" className="logo" alt="" /></a>
                </div>
                <div className="collapse navbar-collapse" id="navbar-menu">
                    <ul className="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li className='navItems' onClick={() => handleClick('/')}><a>Inicio</a></li> 
                        <li className='navItems' onClick={() => handleClick('/login')}><a >Login</a></li>
                        <li className='navItems' onClick={() => handleClick('/todos')}><a>Empleos</a></li> 
                        <li className="dropdown">
                            <a href="#" className="dropdown-toggle" data-toggle="dropdown">Acceso</a>
                            <ul className="dropdown-menu animated fadeOutUp" style={customStyle}>
                                <li className="active navItems" onClick={() => handleClick('/login')}><a>Acceso|Postulante</a></li>
                                <li className='navItems'><a>Intranet|Empresa</a></li>
                               
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>   
        </nav>
    </>
  )
}

export default Header
