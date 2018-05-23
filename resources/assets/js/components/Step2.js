import React from 'react'

class Step2 extends React.Component {
    constructor(props) {
        super(props);
        this.renderLine = this.renderLine.bind(this);
    }

    renderLine(ids = []) {
        return (
            <div className="seat-line">
                {ids.map((seat, idx) => {
                    if (!seat) return <span key={idx} className="seat no-style" id="0"><span className="number">0</span></span>;
                    return <span
                        onClick={() => this.props.togglePlace(seat)}
                        key={idx}
                        className={this.props.place === seat ? "seat active" : "seat"}
                    >
                        <span className="number">{seat}</span>
                    </span>;
                })}
            </div>
        )
    }

    render() {
        const { handleChange } = this.props;
        return (
            <div className="routes-buy2">
                <p className="gray-text">
                    <span onClick={() => handleChange(0)}>Крок 1 / </span>
                    <span className="step">Крок 2</span>
                    <span onClick={() => handleChange(2)}> / Крок 3</span>
                </p>
                <div className="bus">
                    <div className="driver">
                        <i className="far fa-user" />
                    </div>
                    <div className="seats">
                        <div className="up-line">
                            {this.renderLine([1,5,9,13,17,0,0,25,29,33,37,41,45])}
                            {this.renderLine([2,6,10,14,18,0,0,26,30,34,38,42,46])}
                        </div>
                        <div className="down-line">
                            {this.renderLine([3,7,11,15,19,21,23,27,31,35,39,43,48])}
                            {this.renderLine([4,8,12,16,20,24,28,32,36,40,44,49])}
                        </div>
                    </div>
                </div>
                <a onClick={() => this.props.handleChange(2)}>Далі</a>
            </div>
    )
    }
}
export default Step2