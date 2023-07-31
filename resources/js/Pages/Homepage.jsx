import React from "react";
import { Head } from "@inertiajs/react";
import Navbar from "@/Components/Navbar";
import NewsLists from "@/Components/Homepage/NewsList";

// Ketika menjalankan npm run dev - setelah aktif
//  maka pada page route welcome or  '/'
//  akan otomatis digantikan dengan page ini

export default function Homepage(props) {
    //props == bebas nama
    console.log(props);
    return (
        <div className="min-h-screen bg-slate-50 ">
            <Head title={props.title} />
            <Navbar />
            <NewsLists />
        </div>
    );
}
