import axios from "axios";

export interface Fecha {
  $date: string;
}

export interface Vacantes {
  descripcion_vacante: string;
  created_at: Fecha;
  id_area_vacante: number;
  id_vacante: number;
  lugar: string;
  nombre_vacante: string;
  salario_maximo: string;
  salario_minimo: string;
  tipo_empleo: string;
  usuario_crea: null | string;
}
/*
export interface Areas {
  descripcion_area: string;
  fecha_actua: string;
  fecha_crea: string;
  id_area: number;
  nombre_area: string;
  usuario_actua: string;
  usuario_crea: string;
}*/

export class ApiService {
  // URL base de la API
  private readonly baseUrl: string = import.meta.env.VITE_API_URL;

  constructor() {}

  // Función para obtener datos de la API
  async getVacantes(): Promise<Vacantes[]> {
    const url = `${this.baseUrl}/vacantes`;
    const respuesta = await axios.get(url);
    return respuesta.data;
  }
}
