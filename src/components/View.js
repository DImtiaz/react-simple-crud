import React, { Component } from 'react'
import axios from 'axios';
import RecordList from './RecordList';

export default class View extends Component {

    constructor(props) {
        super(props);
        this.state = {students: []};
    }
    componentDidMount(){
        axios.get('/reactcrud/view.php')
        .then(response => {
            this.setState({students: response.data});
        })
        .catch(function (error) {
            console.log(error);
        })
    }

    userList(){
        return this.state.students.map(function(object, i){
            return <RecordList obj = {object} key={i} />;
        })
    }



    render() {
        return (
            <div>
                <h3 className="text-center">
                    Users List
                </h3>
                <table className="table table-striped mt-2">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {this.userList()}
                    </tbody>
                </table>
            </div>
        );
    }
}
