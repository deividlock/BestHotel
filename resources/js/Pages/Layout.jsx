import { Link } from '@inertiajs/react'
import 'bootstrap/dist/css/bootstrap.min.css'

export default function Layout({ children }) {
  return (
    <main>
      <header>
        <nav className="navbar navbar-expand-lg bg-light">
        <div className="container-fluid">
            <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span className="navbar-toggler-icon"></span>
            </button>
            <div className="collapse navbar-collapse" id="navbarNav">
            <Link className="navbar-brand" href="/"><h3 className='text-primary'>Best Hotel</h3></Link>
            <ul className="navbar-nav">
                <li className="nav-item">
                <Link className="nav-link active" href="/">Home</Link>
                </li>
                <li className="nav-item">
                <a className="nav-link" href="#">Features</a>
                </li>
                <li className="nav-item">
                <a className="nav-link" href="#">Pricing</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
      </header>
      <article>{children}</article>
    </main>
  )
}