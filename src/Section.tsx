function Section () {

    const mainStyle = {
        background:'#242c36 url(img/slider-01.jpg) no-repeat'
    }

    return (
        <>
            <section className="main-banner" style={mainStyle}>
            <div className="container">
                <div className="caption">
                    <h2>Construye tu carrera</h2>
                    <form>
                        <fieldset>
                            <div className="col-md-4 col-sm-4 no-pad">
                                <input type="text" className="form-control border-right" placeholder="Titulo,palabras claves" />
                            </div>
                            <div className="col-md-3 col-sm-3 no-pad">
                                <select className="selectpicker border-right">
                                    <option value="0">Experiencia</option>
                                    <option value="1">Sin Experiencia</option>
                                    <option value="2">1 Año</option>
                                    <option value="3">2 Años</option>
                                    <option value="4">3 Años</option>
                                    <option value="5">4 Años</option>
                                    <option value="6">5 Años</option>
                                    <option value="7">6 Años</option>
                                    <option value="8">7 Años</option>
                                    <option value="9">8 Años</option>
                                    <option value="10">9 Años</option>
                                    <option value="11">10 Años</option>
                                    <option value="12">Más de 10 Años</option>
                                </select>
                            </div>
                            <div className="col-md-3 col-sm-3 no-pad">
                                <select className="selectpicker">
                                    <option>Area</option>
                                    <option>Comercial</option>
                                    <option>Tecnología de Información</option>
                                    <option>Marketing</option>
                                    <option>Finanzas</option>
                                    <option>Contabilidad</option>
                                    <option>Compras</option>
                                </select>
                            </div>
                            <div className="col-md-2 col-sm-2 no-pad">
                                <input type="submit" className="btn seub-btn" value="Buscar" />
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </section>

        </>
    )


}

export default Section