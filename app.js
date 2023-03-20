const express = require('express');
const app = express();
const fs = require('fs');
const path = require('path');

app.use(express.static('public')); // Serve static files from 'public' folder

const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
  console.log(`Server started on port ${PORT}`);
});