<template>
  <router-view/>
</template>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  /* text-align: center; */
  color: #262729;
  background-color: #ffffff;
}

* {
  margin: 0;
}

main {
  overflow-y: auto;
}

nav {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

nav a {
  font-weight: bold;
  color: #262729;
  text-decoration: none;
  font-size: 20px;
}

nav a.router-link-exact-active {
  color: #1cbdcf;
}

/* Input Field Styles */
input[type="text"],
input[type="email"],
input[type="password"],
input[type="date"]  {
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  width: 100%;
  box-sizing: border-box; 
  font-family: Arial, sans-serif;
}

textarea {
    font-family: Arial, sans-serif;
    height: 100px;
    padding: 7px;
    border: 1px solid #ccc;
    border-radius: 7px;
    font-size: 14px;
    resize: vertical;
}
textarea:focus {
    border-color: #000000;
    outline: none;
    box-shadow: 0 0 8px rgba(0,123,255,0.2);
}

/* Label Styles */
label {
  display: block;
  margin-bottom: 5px; 
  font-weight: bold; 
}

/* Select Styles */
select {
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  width: 100%;
  box-sizing: border-box;
  appearance: none; 
  background-image: url('data:image/svg+xml;utf8,<svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill="%23333" d="M3 7l7 7 7-7H3z"/></svg>'); /* Custom arrow icon */
  background-repeat: no-repeat;
  background-position-x: calc(100% - 10px);
  background-position-y: center;
}

select option {
  padding: 10px;
}

.sidebar {
  display: grid;
  grid-template-rows: 0.2fr 1fr 0.2fr;
  padding-block: 10%;
  padding-inline: 10%;
  background-color: #ffffff;
  color: #262729;
  box-shadow: 10px 0px 30px rgba(0, 0, 0, 0.10);
}

.form {
    display: flex;
    flex:1;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 45%;
    width: 30%;
    gap: 20px;
}

.form-group {
    display: flex;
    flex-direction: column;
    width: 100%;
}

.form-nav {
    display: flex;
    flex-direction: column;
    width: 100%;
    gap: 20px;
}

.form-btn {
    padding: 10px 20px;
    border: none;
    background-color: #1cbdcf;
    color: white;
    cursor: pointer;
    border-radius: 5px;
    font-weight: bold;
}

.form-btn:hover {
  background-color: #0d5466; 
}

.danger-btn {
  background-color: #ff5555;
  color: white;
  border: none; 
  padding: 10px 20px;
  border-radius: 5px; 
  cursor: pointer; 
}

.danger-btn:hover {
  background-color: #ff3333; 
}

</style>
