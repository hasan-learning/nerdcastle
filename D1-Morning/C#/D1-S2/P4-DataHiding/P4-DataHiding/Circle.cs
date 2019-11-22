using System;
namespace CircleExample
{
    public class Circle
    {
        public double radius;
        public const double PI = Math.PI;
        public double area;
        public double perimeter;
        public double diameter;

        public Circle(double radius)
        {
            this.radius = radius;
        }

        public double GetPerimeter()
        {
            perimeter = PI * GetDiameter();
            return perimeter;
        }

        public double GetArea()
        {
            area = PI * radius * radius;
            return area;
        }

        public double GetDiameter()
        {
            diameter = 2 * radius;
            return diameter; 
        }
    }
}
