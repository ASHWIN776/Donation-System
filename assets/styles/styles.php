<style>
   body, html{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
}

*, *::after, *::before{
    box-sizing: inherit;
}

header{
    position: absolute;
    width: 100%;
    top: 0%;
    display: flex;
    align-items: center;
    min-height: 6vh;
    transition: background-color 400ms;
    z-index: 2;
}

header > *{
    margin: 0 1rem;
}

header ul{
    padding: 0;
    margin: 0;
}

nav{
    flex-grow: 1;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

nav ul{
    display: flex;
    align-items: center;
}

.nav-logo{
    letter-spacing: 3px;
    font-weight: bold;
    color: #3B9FEB;
}

.nav-logo, .nav-link{
    text-transform: uppercase;
}

.nav-item{
    list-style-type: none;
    margin: 0.2rem 0;
}


.nav-link{
    text-decoration: none;
    color: black;
}

.nav-link:active{
    border-bottom: 2px solid;
}


#donate-nav{
    background-color: transparent;
    border: 3px solid #3B9FEB;
    text-transform: uppercase;
    border-radius: 5px;
}

.line{
    background-color: black;
    border-radius: 10px; 
    width: 25px;
    height: 3px;
    margin: 5px;
    transition: transform 400ms;
}


.burger{
    display: none;
}

.burger:hover{
    cursor: pointer;
}

.burger:hover .line{
    background-color: rgb(125, 93, 93);
    border-color:rgb(103,103,103);
}

.nav-scroll{
    background-color: white;
    z-index: 1;
    position: fixed;
}

.nav-scroll #donate-nav{
    background-color: #3B9FEB;
    color: white;
}

/* Header Styles ends here */

main{
    /* border: 2px solid red; */
}

#home{
    display: flex;
    height: 100vh;
}


#home-content{
    align-items: center;
    flex-basis: 70%;
    display: flex;
}

#home-content > div{
    width: 500px;   
    margin-left: 4rem; 
}

h1{
    font-size: 3rem;
}

.home-para{
    line-height: 30px;
}

#donate-btn{
    font-weight: bold;
    font-size: 1rem;
    padding: 0.4rem 2rem;
    background: #3B9FEB;
    border: none;
    text-transform: uppercase;
    font-family: inherit;
    color: white;
    border-radius: 5px;
}

button:hover{
    cursor: pointer;
}

#home-pic{
    flex-basis: 30%;
    background-color: #BBBCC2;
}

#home-pic img{
    position: relative;
    left: -50%;
    top: 50%;
    transform: translateY(-50%);
}

.blue-hl{
    color: #3B9FEB;
}

/* Home Section Styles end here */
#about{
    height: 100vh;
}


#expenditure{
    padding: 1.5rem 0;
}

h2{
    text-align: center;
    margin-bottom: 2rem;
}

#expenditure > div{
    display: flex;
    justify-content: center;
}

.expend-container{
    padding: 1rem;
    margin:  0 2rem;
    flex-basis: 300px;
    border: 1px solid #D8D8D8;
    border-radius: 10px;
}

#expend-container{
    display: inline-block;
}

h5{
    margin-top: 0.5rem;
}

.expend-content{
    color: #6f6e6e;
    line-height: 30px;
}

/* expenditure styles end here */

#org-stats{
    background-color: #F3F3F3;
    display: flex;
    align-items: center;
    padding: 1.5rem 0;
}

#org-stats > div{
    flex-basis: 50%;
    text-align: center;
}


#num-stats{
    display: flex;
    align-items: center;
    justify-content: center;
}

#num-stats > div{
    width: 80%;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.num-container{
    flex-basis: 50%;
    padding: 1rem;
}

.num-container h3{
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    margin: 0;
}

.num-content{
    margin: 0.4rem 0;
    text-transform: uppercase;
}

footer{
    padding: 1rem 0;
    text-align: center;
    font-weight: bold;
    margin-top: -1rem;
}

footer p{
    margin: 0;
}


@media only screen and (max-width: 800px){
    
    header{
        justify-content: space-between;
        background-color: white;
    }

    
    nav{
        flex-grow: 0;
        flex-direction: column;
        padding-left: 1rem;
        position: absolute;
        width: 100%;
        margin: 0;
        left: 0;
        top: 6vh;
        z-index: -1;
        background-color: white;
        transform: translateY(-100%);
        transition: transform 500ms;
    }

    .burger{
        display: block;
    }

    .nav-active{
        transform: translateY(0);
    }

    h1{
        font-size: 1.5rem;
    }

    #donate-btn{
        font-size: 14px;
    }



    main{
        transition: margin 500ms;
    }

    .shift-main{
        margin-top: 14.85rem;
    }

    .rotate .line1{
        transform: rotate(-40deg) translate(-5px,6px);
    }

    .rotate .line3{
        transform: rotate(40deg) translate(-5px,-6px);
    }

    .rotate .line2{
        visibility: hidden;
    }

    .nav-top{
        z-index: 0;
    }


    main{
        margin-top: 8.85rem;
    }

    #home{
        flex-direction: column-reverse;
    }

    #home-content{
        text-align: center;
        padding: 0 2rem;
        flex-basis: 100%;
    }

    #home-content > div{
        margin: 0;
    }

    #home-pic{
        text-align: center;
        background-color: white;
    }

    #home-pic img{
        max-width: 100%;
        position: static;
        transform: translateY(0%);
    }

    /* Home Section Styles end here */

    #expenditure > div{
        flex-direction: column;
        padding: 0 2rem;
    }

    /* Expenditure section over */

    #org-stats{
        display: flex;
        flex-direction: column-reverse;       
    }
}

@media only screen and (max-width: 1300px){
    #home-content,
    #home-pic{
        flex-basis: 50%;
    }

    #home-content{
        padding-top: 1rem;
    }

    #home-pic{
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #home-pic > img{
        position: static;
        transform: translateY(0);
    }

    #home-content > div{
        width: auto;
    }
}



@media only screen and (max-width: 1000px){
    #expenditure > div{
        flex-wrap: wrap;
    }

    .expend-container{
        flex-basis: calc(50% - 4*2rem);
        margin: 1rem;
    }
} 
</style>