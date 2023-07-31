import React from 'react'
import { Head } from '@inertiajs/react'

// Ketika menjalankan npm run dev - setelah aktif
//  maka pada page route welcome or  '/'
//  akan otomatis digantikan dengan page ini

export default function Homepage(props) {
    return (
        // console.log(props)
        <div className="flex justify-center items-center min-h-screen bg-neutral-600 text-white text-2xl">
            <Head title={props.title}/>
            <p>{props.description}</p>
        </div>
    )
}