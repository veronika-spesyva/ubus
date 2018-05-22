import React from 'react'

class Step1 extends React.Component {
    render() {
        const { handleChange } = this.props;
        return (
            <div className="routes-buy2">
                <p className="gray-text">
                    <span className="step">Крок 1</span>
                    <span onClick={() => handleChange(1)} > / Крок 2</span>
                    <span onClick={() => handleChange(2)}> / Крок 3</span>
                </p>
                {/*<div className="form-row">
                    <div className="form-group col-md-5">
                        <label htmlFor="inputCity">Звідки</label>
                        <select id="inputState" className="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div className="form-group col-md-5">
                        <label htmlFor="inputState">Куди</label>
                        <select id="inputState" className="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div className="form-group col-md-2">
                        <label htmlFor="inputState">Дата</label>
                        <div className="input-group date">
                            <input type="text" className="form-control" id="datepicker" placeholder="MM/DD/YYYY" />
                        </div>
                    </div>
                </div>*/}
                <form action="https://www.portmone.com.ua/gateway/" method="post">
                <input type="hidden" name="payee_id" value="13990"/>
                <input type="hidden" name="shop_order_number" value="543"/>
                <input type="hidden" name="bill_amount" value="200"/>
                <input type="hidden" name="description" value="Описание заказа"/>
                <input type="hidden" name="success_url" value="http://example.com/success.html"/>
                <input type="hidden" name="failure_url" value="http://example.com/failure.html"/>
                <input type="hidden" name="lang" value="Язык интерфейса"/>
                <input type="submit" value="Оплатить" />
                </form>
                <a onClick={() => this.props.handleChange(1)}>Далі</a>
            </div>
    )
    }
}
export default Step1