using System;

namespace W5_ConstructorAndOverload
{
    class Program
    {
        static void Main(string[] args)
        {
            Person person1 = new Person();

            Person person2 = new Person("Imtiaz", "Ahmed");

            string fullName = person2.GetMyFullName();
            string reverseFullName = person2.GetFullReverseName();

            Console.WriteLine(fullName);
            Console.WriteLine(reverseFullName);

            Person person3 = new Person("Ali", "Akbar", "Hasan");

            fullName = person3.GetMyFullName();
            reverseFullName = person3.GetFullReverseName();

            Console.WriteLine(fullName);
            Console.WriteLine(reverseFullName);

            Console.ReadKey();
        }
    }
}
