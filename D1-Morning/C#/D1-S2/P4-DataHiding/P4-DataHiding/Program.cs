using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace CircleExample
{
    class Program
    {
        static void Main(string[] args)
        {
            double radius = 120.2;
            Circle aCircle = new Circle(radius);
            double area = aCircle.GetArea();
            Console.WriteLine("Circle Area: " + area);
            aCircle.area = 150; //Area can be set.??
            aCircle.perimeter = 120000; //perimeter can also be set.??
            Console.ReadKey();

            // Update the Circle class by using "Data hiding" concept;


        }
    }
}
