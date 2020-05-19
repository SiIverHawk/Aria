import React from "react";
import ReactDOM from "react-dom";

function App() {
    return (
        <div className="container-fluid">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">User Dashboard</div>
                        <div className="card-body">User management</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default App;

ReactDOM.render(<App />, document.getElementById("user-app"));