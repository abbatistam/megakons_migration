//import connection from './database'
import { ApiService, Vacantes } from './VacantesService';
import { useState, useEffect } from 'react';
import { useNavigate } from 'react-router-dom';

function Todos () {

    const navigate = useNavigate();

    const handleClick = (vacanteId: number) => {
      navigate(`/vacante-details/${vacanteId}`);
    };

    const instance = new ApiService()
    const [vacantes, setVacantes] = useState<Vacantes[]>([]);
   // const [areas, setAreas] = useState<Areas[]>([])
      

    useEffect(() => {
        const fetchData = async () => {
          try {
            const connection = await instance.getVacantes();
            setVacantes(connection);
    
           // const areas = await instance.getAreas();
           // setAreas(areas);
            console.log(vacantes)
          } catch (error) {
            console.error(error);
          }
        };
    
        fetchData(); // Call the function to fetch data
      }, []);

      
    
    return (
        <>
        <section className="inner-banner" >
            <div className="container">
                <div className="caption">
                    <h2>Vacantes Disponibles</h2>
                </div>
            </div>
        </section>
        <section className="jobs">
            <div className="container">
                <div className="row heading">
                    <h2>Todas las vacantes</h2>
                </div>
                <div className="row top-pad">
                    <div className="filter">
                        <div className="col-md-2 col-sm-3">
                            <p>Buscar por:</p>
                        </div>
                        <div className="col-md-10 col-sm-9 pull-right">
                            <ul className="filter-list">
                                <li>
                                    <input id="checkbox-1" className="checkbox-custom" name="checkbox-1" type="checkbox" />
                                    <label htmlFor="checkbox-1" className="part-time checkbox-custom-label">Medio Tiempo</label>
                                </li>
                                <li>
                                    <input id="checkbox-2" className="checkbox-custom" name="checkbox-2" type="checkbox" />
                                    <label htmlFor="checkbox-2" className="full-time checkbox-custom-label">Tiempo Completo</label>
                                </li>
                                <li>
                                    <input id="checkbox-3" className="checkbox-custom" name="checkbox-3" type="checkbox" />
                                    <label htmlFor="checkbox-3" className="freelancing checkbox-custom-label">Freelance</label>
                                </li>
                                <li>
                                    <input id="checkbox-4" className="checkbox-custom" name="checkbox-4" type="checkbox" />
                                    <label htmlFor="checkbox-4" className="internship checkbox-custom-label">Temporal</label>
                                </li>
                            </ul>	
                        </div>
                    </div>
                </div>
                <div className="companies">
                {vacantes.map((item, index) => (
                        <div className="company-list">
                            <div className="row">
                                <div className="col-md-2 col-sm-2">
                                    <div className="company-logo">
                                        <img src="img/logo_icono.png" className="img-responsive" alt="" />
                                    </div>
                                </div>
                                <div className="col-md-8 col-sm-8">
                                    <div className="company-content">
                                        <h3>{item.nombre_vacante}</h3>
                                        <p><span className="company-name"><i className="fa fa-briefcase"></i>{item.id_area_vacante}</span><span className="company-location"><i className="fa fa-map-marker"></i>{item.lugar}</span>
                                            <span className="package"><i className="fa fa-money"></i>{item.salario_minimo}-{item.salario_maximo}</span></p>
                                    </div>
                                </div>
                                <div className="col-md-2 col-sm-2">
                                    
                                    <a onClick={() => handleClick(index)} className="btn view-job">Ver Vacante</a>
                                </div>
                            </div>
                        </div>
                ))}
                    </div>
            </div>
        </section>
        </>
    )
}

export default Todos