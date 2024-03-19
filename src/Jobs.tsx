//import connection from './database'
import { ApiService, Vacantes } from './VacantesService';
import { useState, useEffect } from 'react';
import { useNavigate } from 'react-router-dom'

function Jobs () {
    const navigate = useNavigate()
    const instance = new ApiService()
    const [vacantes, setVacantes] = useState<Vacantes[]>([]);
   // const [areas, setAreas] = useState<Areas[]>([])

   function handleClick(route:string) {
    navigate(route);
   }
      

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
            <section className="jobs">
            <div className="container">
                <div className="row heading">
                    <h2>Trabajos publicados recientamente</h2>
                </div>
                <div className="companies">
                    {vacantes.map((item) => (
                        <div className="company-list">
                            <div className="row">
                                <div className="col-md-2 col-sm-2">
                                    <div className="company-logo">
                                        <img src="img/logo_icono.png" className="img-responsive" alt="" />
                                    </div>
                                </div>
                            <div className="col-md-10 col-sm-10">
                                <div className="company-content">
                                    <h3>{item.nombre_vacante}<span className="full-time">{item.tipo_empleo}</span></h3>
                                    <p><span className="company-name"><i className="fa fa-briefcase">
                                    </i>{item.id_area_vacante}</span><span className="company-location"><i className="fa fa-map-marker"></i>{item.lugar}</span><span className="package"><i className="fa fa-money"></i>
                                    {item.salario_minimo} - {item.salario_maximo}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                ))}
            </div>
                <div className="row">
                    <input onClick={() => handleClick('/todos')} id="btn-search" type="button" className="btn brows-btn" value="Buscar todos los trabajos" />
                </div>
            </div>
        </section> 
        </>
    )


}

export default Jobs