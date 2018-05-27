import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';
import Step1 from "./Step1";
import Step2 from "./Step2";
import Step3 from "./Step3";
import Step4 from "./Step4";

export const API_URL = 'http://localhost:8000/api';

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
                trip_id: props.id,
                date: undefined,
                time: '10:30'
            },
            user: {},
            buyPlaces: [],
            step: 0
        };
        this.handleChange = this.handleChange.bind(this);
        this.renderStep = this.renderStep.bind(this);
        this.togglePlace = this.togglePlace.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
        this.handleChangeForm = this.handleChangeForm.bind(this);
        this.handleChangeDate = this.handleChangeDate.bind(this);
        this.setBuyPlaces = this.setBuyPlaces.bind(this);
    }

    setBuyPlaces(value) {
        this.setState({ buyPlaces: value })
    }

    handleChange(value) {
        this.setState({ step: value })
    };

    handleChangeForm (name,e) {
        this.setState({ form: {...this.state.form, [name]: e.target.value } });
    }

    handleChangeDate (value) {
        this.setState({ form: {...this.state.form, date: value} })
    }

    togglePlace(place) {
        this.setState({ place })
    }

    handleSubmit() {
        const options = {
            method: 'POST',
            data: {
                user: {...this.state.form, place: this.state.place}
            },
            url: `${API_URL}/order`,
        };
        axios(options).then(response => {
            this.setState({ step: 3, user: response.data });
        });
    }

    renderStep() {
      switch (this.state.step) {
          case 0: return <Step1
              handleChange={this.handleChange}
              title={this.props.title}
              price={this.props.price}
              date={this.state.form.date}
              tripId={this.props.id}
              setBuyPlaces={this.setBuyPlaces}
              onChange={this.handleChangeDate}
          />;
          case 1: return <Step2
              handleChange={this.handleChange}
              place={this.state.place}
              date={this.state.form.date}
              tripId={this.props.id}
              buyPlaces={this.state.buyPlaces}
              togglePlace={this.togglePlace}
          />;
          case 2: return <Step3
              handleChange={this.handleChange}
              handleChangeForm={this.handleChangeForm}
              handleSubmit={this.handleSubmit}
              values={this.state.form}
          />;
          case 3: return <Step4
              values={this.state.user}
              tripId={this.props.id}
              tripTitle={this.props.title}
              tripPrice={this.props.price}
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
    const element = document.getElementById('route');
    const props = {...element.dataset};
    ReactDOM.render(<Route {...props} />, element);
}
