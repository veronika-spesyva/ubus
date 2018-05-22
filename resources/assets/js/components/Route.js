import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';
import Step1 from "./Step1";
import Step2 from "./Step2";
import Step3 from "./Step3";

export default class Route extends Component {
    constructor(props) {
        super(props);
        this.state = {
            place: null,
            form: {
                name: '',
                surname: '',
                patronymic: '',
                email: '',
                phone: '',
                trip_id: 2,
                date: new Date(),
                time: '10:30'
            },
            step: 0
        };
        this.handleChange = this.handleChange.bind(this);
        this.renderStep = this.renderStep.bind(this);
        this.togglePlace = this.togglePlace.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
        this.handleChangeForm = this.handleChangeForm.bind(this);
    }

    handleChange(value) {
        this.setState({ step: value })
    };

    handleChangeForm (name,e) {
        this.setState({ form: {...this.state.form, [name]: e.target.value} })
    }

    togglePlace(place) {
        this.setState({ place })
    }

    handleSubmit() {
        console.log(this.state);
        console.log(JSON.stringify({ place: this.state.place, form: this.state.form }));
        const options = {
            method: 'POST',
            data: {
                place: this.state.place,
                user: this.state.form
            },
            url: 'http://localhost:8000/api/order',
        };
        axios(options);
    }

    renderStep() {
      switch (this.state.step) {
          case 0: return <Step1 handleChange={this.handleChange} />;
          case 1: return <Step2 handleChange={this.handleChange} place={this.state.place} togglePlace={this.togglePlace} />;
          case 2: return <Step3
              handleChange={this.handleChange}
              handleChangeForm={this.handleChangeForm}
              handleSubmit={this.handleSubmit}
              values={this.state.form}
          />;
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
