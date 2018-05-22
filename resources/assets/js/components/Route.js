import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import Step1 from "./Step1";
import Step2 from "./Step2";
import Step3 from "./Step3";

export default class Route extends Component {
    constructor(props) {
        super(props);
        this.state = {
            step: 0
        };
        this.handleChange = this.handleChange.bind(this);
        this.renderStep = this.renderStep.bind(this);
    }

    handleChange(value) {
        this.setState({ step: value })
    };

    renderStep() {
      switch (this.state.step) {
          case 0: return <Step1 handleChange={this.handleChange} />;
          case 1: return <Step2 handleChange={this.handleChange} />;
          case 2: return <Step3 handleChange={this.handleChange} />;
          default: return <div/>
      }
    };

    render() {
        return (
            this.renderStep()
        );
    }
}

if (document.getElementById('route')) {
    ReactDOM.render(<Route/>, document.getElementById('route'));
}
