import Header from "./Header"
import Footer from "./Footer"
import Login from "./Login"
import MainView from "./MainView"
import Register from "./Register"
import Todos from "./Todos"
import VacanteDetails from "./VacanteDetails"
import IntLogin from "./IntLogin"
import {
  BrowserRouter as Router,
  Route,
  Routes
} from "react-router-dom";

function App() {
  

  return (
    <>
      <Router>
        <Header />
        <Routes>
          <Route path="/" element={<MainView />} />
          <Route path="/login" element={<Login />} />
          <Route path="/register" element={<Register />} />
          <Route path="/todos" element={<Todos />} />
          <Route path="/vacante-details/:vacanteId" element={<VacanteDetails />} />
          {/*<Route path="/intLogin" element={<IntLogin />} /> */}
          
        </Routes>
      </Router>
      <Footer />
    </>
  )
}

export default App
