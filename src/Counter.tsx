function Counter () {


    return (
        <>
            <section className="counter">
            <div className="container">
                <div className="col-md-3 col-sm-3">
                    <div className="counter-text">
                        <span aria-hidden="true" className="icon-briefcase"></span>
                        <h3>1000</h3>
                        <p>Empleos publicados</p>
                    </div>
                </div>
                <div className="col-md-3 col-sm-3">
                    <div className="counter-text">
                        <span className="box1"><span aria-hidden="true" className="icon-expand"></span></span>
                        <h3>700</h3>
                        <p>Postulaciones mensuales</p>
                    </div>
                </div>

                <div className="col-md-3 col-sm-3">
                    <div className="counter-text">
                        <span className="box1"><span aria-hidden="true" className="icon-profile-male"></span></span>
                        <h3>500+</h3>
                        <p>Colaboradores</p>
                    </div>
                </div>
                <div className="col-md-3 col-sm-3">
                    <div className="counter-text">
                        <span className="box1"><span aria-hidden="true" className="icon-desktop"></span></span>
                        <h3>2500+</h3>
                        <p>Avisos publicados en el último año</p>
                    </div>
                </div>
            </div>
        </section>
        </>
    )


}

export default Counter