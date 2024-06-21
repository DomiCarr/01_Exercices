// canvas

const graph = document.getElementById("graph");
const ctx = graph.getContext("2d");

// Ecrire le label de l'axe Y en vertical
const fillTextVertically = (text, x, y) => {
    const lineHeight = 10;
    y = y - lineHeight * text.length / 2;


    ctx.textAlign = "center";
    for (var i = 0; i < text.length; i += 1) {
        ctx.fillText(text[i], x, y + i * lineHeight);
    }
}

// Axe X horizontal
const createAxeX = (marks, scale, unit, label) => {
    const distance = (ctx.canvas.width - 100) / marks

    ctx.beginPath()
    ctx.moveTo(50, ctx.canvas.height - 50)
    ctx.lineTo(ctx.canvas.width - 50, ctx.canvas.height - 50)
    ctx.stroke()

    if (label) {
        ctx.textAlign = "center"
        ctx.fillText(label, ctx.canvas.width / 2, ctx.canvas.height - 10)
    }

    for (var i = 0; i <= marks; i += 1) {
        ctx.beginPath()
        ctx.moveTo(50 + distance * i, ctx.canvas.height - 50)
        ctx.lineTo(50 + distance * i, ctx.canvas.height - 45)
        ctx.stroke()

        ctx.textAlign = "center";
        if (unit) {
            ctx.fillText(scale * i + unit, 50 + i * distance, ctx.canvas.height - 35);
        }
        else {
            ctx.fillText(scale * i, 50 + i * distance, ctx.canvas.height - 35);
        }
    }
}

// Axe Y vertical
const createAxeY = (marks, scale, unit, label) => {
    const distance = (ctx.canvas.height - 100) / marks

    ctx.beginPath()
    ctx.moveTo(50, 50)
    ctx.lineTo(50, ctx.canvas.height - 50)
    ctx.stroke()

    if (label) {
        ctx.textAlign = "center"
        fillTextVertically(label, 10, ctx.canvas.height / 2)
    }

    for (var i = 0; i <= marks; i += 1) {
        ctx.beginPath()
        ctx.moveTo(50, 50 + distance * i)
        ctx.lineTo(45, 50 + distance * i)
        ctx.stroke()

        ctx.textAlign = "center";
        if (unit) {
            ctx.fillText(scale * i + unit, 35, ctx.canvas.height - 50 - distance * i)
        }
        else {
            ctx.fillText(scale * i, 35, ctx.canvas.height - 50 - distance * i)
        }
    }
}

// Generer des points aléatoirement
const generatePoints = (size, x_min, x_max, y_min, y_max, color) => {
    const points = []

    for (var i = 0; i < size; i += 1) {
        points.push({
            x: x_min + Math.random() * (x_max - x_min),
            y: y_min + Math.random() * (y_max - y_min),
            color: color
        })
    }
    return points;
}

const placePoints = (points, marks_x, scale_x, marks_y, scale_y) => {
    const transform_x = marks_x * scale_x / (ctx.canvas.width - 100)
    const transform_y = marks_y * scale_y / (ctx.canvas.height - 100)

    points.forEach(point => {
        const x = 50 + point.x / transform_x
        const y = ctx.canvas.height - 50 - point.y / transform_y

        ctx.beginPath()
        ctx.arc(x, y, 5, 0, 2 * Math.PI)
        ctx.fillStyle = point.color
        ctx.fill()
    });

}


createAxeX(10, 100, "$", "Income");
createAxeY(10, 10, "%", "Hapiness");

const points = generatePoints(50, 0, 1000, 0, 100, "red");
placePoints(points, 10, 100, 10, 10)



