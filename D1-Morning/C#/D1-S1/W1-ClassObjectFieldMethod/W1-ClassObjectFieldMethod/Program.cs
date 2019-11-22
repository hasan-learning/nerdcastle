using System;

namespace W1_ClassObjectFieldMethod
{
    class Program
    {
        static void Main(string[] args)
        {
            Person person1 = new Person();
            person1.firstName = "Imtiaz";
            person1.middleName = "Ahmed";
            person1.lastName = "Rana";

            string fullName = person1.GetMyFullName();
            string reverseFullName = person1.GetFullReverseName();

            Console.WriteLine(fullName);
            Console.WriteLine(reverseFullName);

            Person person2 = new Person();
            person2.firstName = "Ali";
            person2.middleName = "Akbar";
            person2.lastName = "Hasan";

            fullName = person2.GetMyFullName();
            reverseFullName = person2.GetFullReverseName();

            Console.WriteLine(fullName);
            Console.WriteLine(reverseFullName);

            Console.ReadKey();
        }
    }
}
