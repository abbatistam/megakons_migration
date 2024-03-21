import { ApiService, Vacantes } from "./VacantesService";
import { useState, useEffect } from "react";
import { useParams, useNavigate } from "react-router-dom";

function VacanteDetails () {

    const { vacanteId } = useParams()

    const id : number = vacanteId ? parseInt(vacanteId) : 0
    
    const instance = new ApiService()
    const [vacantes, setVacantes] = useState<Vacantes[]>([]);
    // const [areas, setAreas] = useState<Areas[]>([])
       
    const navigate = useNavigate()
 
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

       const handlePostulation = () => {
        alert("Postulación Exitosa");
        navigate('/todos')
       }
       

    return (
        <>
        <section className="inner-banner" >
            <div className="container">
                <div className="caption">
                    <h2>Detalle-Vacante</h2>
                </div>
            </div>
        </section>
        <section className="profile-detail">
            <div className="container">
                <div className="col-md-12">
                    <div className="row">
                        <div className="basic-information">
                            <div className="col-md-3 col-sm-3">
                                <img src="/img/logo.png" alt="" className="img-responsive" />
                            </div>
                            <div className="col-md-9 col-sm-9">
                                <div className="profile-content">
                                    <h2>MegaKons<span>{vacantes[id]?.id_area_vacante}</span></h2>
                                    <ul className="information">
                                        <li><span>Puesto:</span>{vacantes[id]?.nombre_vacante}</li>
                                        <li><span>Lugar:</span>{vacantes[id]?.lugar}</li>
                                        <li><span>Website:</span>https://megakons.com/</li>
                                        <li><span>Salario:</span>{vacantes[id]?.salario_minimo}-{vacantes[id]?.salario_maximo}</li>
                                        <li><span>Correo:</span>info@megakons.com</li>
                                        <li><span>Fecha Publicación:</span>{vacantes[id]?.created_at.$date.split('T')[0]}</li>
                                    </ul>
                                </div>
                            </div>
                            <ul className="social">
                                
                            </ul>
                            <div className="panel panel-default">
                                <div className="panel-heading">
                                    <i className="fa fa-user fa-fw"></i> Sobre MegaKons
                                </div>
                               
                                <div className="panel-body">
                                    <p> Años Construyendo Confianza. Distribuidores E Importadores Directos De Materiales De Construcción En El Ecuador. 
                                        Somos Una Empresa Comprometida En Satisfacer Las Necesidades De Nuestros Clientes Con Materiales Ferreteros De Calidad.</p>
                                </div>
                            </div>
                            <div className="panel panel-default">
                                <div className="panel-heading">
                                    <i className="fa fa-leaf fa-fw"></i> Descripción del Puesto:
                                </div>
                             
                                <div className="panel-body">
                                    <p>{vacantes[id]?.descripcion_vacante}</p>	
                                   
                                </div>
                            </div>
                           
                            <div className="row">
                                <input onClick={handlePostulation} type="button" className="btn brows-btn" value="Postular" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    </>
    )
}

export default VacanteDetails