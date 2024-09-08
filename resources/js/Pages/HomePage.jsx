import Layout from './Layout';
import axios from 'axios';
import React, { useState } from 'react';
import 'bootstrap/dist/css/bootstrap.min.css';
import { Search } from 'react-bootstrap-icons';

const Home = () => {
  
  const [data, setData] = useState([])
  const [ query, setQuery ] = useState([])
  const [] = data

  const postData = () => {
      axios.post(`/api/v1/search/hotel`, {
          search:query
      }).then((response) => {
          setData(response.data.data);
      }).catch((error) => {
        if (error.response) {
           console.log(error.response);
           console.log(error.response.status);
        } else if (error.request) {
           console.log("network error");
        } else {
           console.log(error);
        }
      });
  }
  
  return (
    <>
      <div className="container fluid p-2 base-height">
        <div className="row">
          <div className="col-sm-6 center p-4 mx-auto">
              <div className="col-sm-4">
                <div className="card border-0">
                  <img src="https://media.istockphoto.com/id/1079547122/es/vector/edificio-moderno-simple.jpg?s=612x612&w=0&k=20&c=IivB36tIGPDnUUOnSv6SxiEjExf9EXy3IOtOxa63y7o=" className="card-img-top image-search" alt="..." />
                    <div className="card-body text-center">
                      <h5 class="card-title">Find your hotel</h5>
                      <p className="card-text">In seconds!</p>
                    </div>
                  </div>
              </div>
              <div className="col-sm-4">
                <div className="card border-0">
                    <img src="https://www.forjadores.mx/wp-content/uploads/2020/10/Ahorro_definiciondeahorro.png" className="card-img-top image-search" alt="..." />
                    <div className="card-body text-center">
                      <h5 class="card-title">Save money</h5>
                      <p className="card-text">Compare prices and choose the one that suits you best.</p>
                    </div>
                  </div>
              </div>
              <div className="col-sm-4">
                <div className="card border-0">
                    <img src="https://st4.depositphotos.com/6900204/27557/v/450/depositphotos_275578804-stock-illustration-satisfied-cartoon-couple-resting-on.jpg" className="card-img-top image-search" alt="..." />
                      <div className="card-body text-center">
                        <h5 class="card-title">Relax</h5>
                        <p className="card-text">Get the rest you deserve.</p>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div className="row">
          <div className="col-lg-12 center">
              <div className="col-lg-6" id="custom-search-input">
                  <div className="input-group col-md-12">
                      <input type="text" className="form-control input-lg" placeholder="where do you want to go?" onChange={(e) => setQuery(e.target.value)} />
                      <span className="input-group-btn p-2">
                          <button className="btn btn-primary" type="button" onClick={postData}>
                           Search
                          </button>
                      </span>
                  </div>
              </div>
          </div>
        </div>
        <br/>
        <div className="row bg-white mx-auto">
            {
              data.map((dat, id) => (
                  <div className="col-lg-6">
                  <div key={dat.id} className="card mb-3 card-hotel">
                  <div className="row g-0">
                    <div className="col-md-4">
                      <img src={dat.image} className="img-fluid rounded-start h-100" alt="Hotel Thumbnail" />
                    </div>
                    <div className="col-md-8">
                      <div className="card-body">
                        <div className="row">
                          <div className="col-10"><h5 className="card-title"><a className="text-decoration-none" target="_blank" href={dat.link}>{dat.name}</a></h5></div>
                          <div className="col-2">{dat.price}</div>
                        </div>
                        <p className="card-text">{dat.description}</p>
                        <p className="card-text"><small className="text-body-secondary">Rating: {dat.star}</small></p>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
              ))
            }
        </div>
      </div>
      <br/>
      
    </>
  )
}

Home.layout = page => <Layout children={page} title="Welcome" />

export default Home
