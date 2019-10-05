import turtle
t=turtle.Turtle()
t.width(6)
t.speed(6)
t.color("orange")
for i in range(0, 6):
    for j in range(0, 6):
        t.forward(60)
        t.right(60)
    t.penup()
    t.right(60)
    t.forward(80)
    t.pendown()


t.hideturtle()
turtle.done()






         

