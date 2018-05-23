import React from 'react'

function formatDate(date) {
    let dd = date.getDate();
    if (dd < 10) dd = '0' + dd;
    let mm = date.getMonth() + 1;
    if (mm < 10) mm = '0' + mm;
    let yy = date.getFullYear() % 100;
    if (yy < 10) yy = '0' + yy;
    return dd + '.' + mm + '.' + yy;
}

class Step4 extends React.Component {
    render() {
        const { values, tripPrice, tripTitle } = this.props;
        return (
            <div className="routes-buy2">
                <form action="https://www.portmone.com.ua/gateway/" method="post">
                    <input type="hidden" name="payee_id" value="13990"/>
                    <input type="hidden" name="shop_order_number" value={values.id} />
                    <input type="hidden" name="bill_amount" value={tripPrice} />
                    <input type="hidden" name="description" value={`Покупка билета на ${tripTitle}, дата:${formatDate(new Date(values.date))}, время:${values.time}`} />
                    <input type="hidden" name="success_url" value="http://localhost:8000/pay-success"/>
                    <input type="hidden" name="failure_url" value="http://localhost:8000/pay-failure"/>
                    <input type="hidden" name="lang" value="Язык интерфейса"/>
                    <input type="submit" value="Оплатить" />
                </form>
            </div>
    )
    }
}
export default Step4