import React from 'react'

class Step1 extends React.Component {
    render() {
        const { handleChange } = this.props;
        return (
            <div className="routes-buy2">
                <p className="gray-text">
                    <span className="step">Крок 1</span>
                    <span> / Крок 2</span>
                    <span> / Крок 3</span>
                </p>
                <h3>Інформація про напрям</h3>
                <a onClick={() => this.props.handleChange(1)}>Далі</a>
            </div>
    )
    }
}
export default Step1