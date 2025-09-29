const express = require('express');
const app = express();
const PORT = 3000;

// Use built-in Express JSON parser (bodyParser is not needed)
app.use(express.json());
app.use(express.urlencoded({ extended: true }));

let items = [];

// Add a home route for testing
app.get('/', (req, res) => {
    res.send('Server is working! Go to /items to see items.');
});

//---POST
app.post('/items', (req, res) => {
    // Add validation
    if (!req.body || !req.body.name) {
        return res.status(400).json({ error: 'Name is required' });
    }
    
    const newItem = {
        id: items.length + 2,
        name: req.body.name,
    };
    
    items.push(newItem);
    res.status(201).json(newItem);
});

//---GET
app.get('/items', (req, res) => {
    res.json(items);
});

//---PUT
app.put('/items/:id', (req, res) => {
    const itemId = parseInt(req.params.id, 10);
    const item = items.find(i => i.id === itemId);

    if (!item) {
        return res.status(404).json({ message: 'Not Found' });
    }
    
    // Add validation
    if (!req.body || !req.body.name) {
        return res.status(400).json({ error: 'Name is required' });
    }
    
    item.name = req.body.name;
    res.json(item);
});

//---DELETE
app.delete('/items/:id', (req, res) => {
    const itemId = parseInt(req.params.id, 10);
    const itemIndex = items.findIndex(i => i.id === itemId);

    if (itemIndex === -1) {
        return res.status(404).json({ message: 'Not Found' });
    }
    
    items.splice(itemIndex, 1);
    res.status(204).send();
});

app.listen(PORT, () => {
    console.log(`The server is running on port ${PORT}`);
});