import "./App.css";
import Listado from "./componentes/Listado.jsx";
import Matriculas from "./componentes/Matriculas.jsx";
import matriculados from "./objetos/matriculados.json";
function App() {
  return (
    <>
      <Listado/>
      <p>----------------------------------------------------------</p>
      <Matriculas objeto={matriculados}/>
    </>
  );
}

export default App;
