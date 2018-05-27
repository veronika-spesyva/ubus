import React from 'react'
import DayPickerInput from 'react-day-picker/DayPickerInput'
import style from 'react-day-picker/lib/style.css'

import axios from 'axios'
import {API_URL} from "./Route";

class Step1 extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            loading: false,
            error: null,
        };
        this.handleNext = this.handleNext.bind(this);
    }

    handleNext() {
        this.setState({ loading: true });
        axios.get(`${API_URL}/passengers/${this.props.date}/trip/${this.props.tripId}`)
            .then(response => {
                this.setState({ loading: false }, () => {
                    this.props.setBuyPlaces(response.data.map(item => item.place));
                    this.props.handleChange(1);
                })
            })
            .catch((error) => {
            console.log(error);
                this.setState({
                    loading: false,
                    error: 'Такого рейса не существует, выберите другой день.'
                })
            });
    }

    render() {
        const { title, price, onChange, date } = this.props;

        if (this.state.loading) {
            return (
                <div>Loading...</div>
            );
        }

        return (
            <div className="routes-buy2">
                <p className="gray-text">
                    <span className="step">Крок 1</span>
                    <span> / Крок 2</span>
                    <span> / Крок 3</span>
                </p>
                <h3>Інформація про напрям</h3>
                <h2>{title}</h2>
                <p>Ціна: {price}</p>
                <DayPickerInput onDayChange={onChange} value={date} />
                <br />
                <p>{this.state.error}</p>
                <a onClick={this.handleNext}>Далі</a>
            </div>
    )
    }
}
export default Step1