import React from 'react'

class Step3 extends React.Component {
    render() {
        const { handleChange } = this.props;
        return (
            <div className="routes-buy2">
                <p className="gray-text"><span onClick={() => handleChange(0)}>Крок 1</span><span onClick={() => handleChange(1)}> / Крок 2</span><span  className="step"> / Крок 3</span></p>
                <div id="checkout">
                    <div id="checkout_wrapper" />
                </div>
                <a>Далі</a>
            </div>
    )
    }
}
export default Step3