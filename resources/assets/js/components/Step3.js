import React from 'react'

class Step3 extends React.Component {
    render() {
        const { handleChange, handleChangeForm, values } = this.props;
        return (
            <div className="routes-buy2">
                <p className="gray-text"><span onClick={() => handleChange(0)}>Крок 1</span><span onClick={() => handleChange(1)}> / Крок 2</span><span  className="step"> / Крок 3</span></p>
                <div className="form-row">
                    <div className="form-group col-md-12">
                        <label htmlFor="name">Name</label>
                        <input id="name" type="text" onChange={handleChangeForm.bind(this, 'name')} value={values.name} />
                    </div>
                    <div className="form-group col-md-12">
                        <label htmlFor="secondName">Second Name</label>
                        <input id="secondName" type="text" onChange={handleChangeForm.bind(this, 'surname')} value={values.surname} />
                    </div>
                    <div className="form-group col-md-12">
                        <label htmlFor="secondName">patronymic??</label>
                        <input id="patronymic" type="text" onChange={handleChangeForm.bind(this, 'patronymic')} value={values.patronymic} />
                    </div>
                    <div className="form-group col-md-12">
                        <label htmlFor="email">email</label>
                        <input id="email" type="email" onChange={handleChangeForm.bind(this, 'email')} value={values.email} />
                    </div>
                    <div className="form-group col-md-12">
                        <label htmlFor="phone">phone</label>
                        <input id="phone" type="text" onChange={handleChangeForm.bind(this, 'phone')} value={values.phone} />
                    </div>
                </div>
                <a onClick={this.props.handleSubmit}>Купить</a>
            </div>
    )
    }
}
export default Step3