using System;
namespace W14_OneToMany
{
    static class Program
    {
        public static void Main()
        {
            Student student1 = new Student("S-9373", "Dolon", "d@mail.com");
            Student student2 = new Student("S-836", "Rafi", "r@mail.com");
            Student student3 = new Student("S-2434", "Sufi", "s@mail.com"); 
            Student student4 = new Student("S-9735", "Kartik", "k@mail.com");

            Department dept1 = new Department("CSE", "Computer Sc. & Engineering");
            dept1.StudentList.Add(student1);
            dept1.StudentList.Add(student2);
            dept1.StudentList.Add(student3);
            dept1.StudentList.Add(student4);

            foreach(Student aStudent in dept1.StudentList)
            {
                Console.WriteLine(aStudent.Name + " " + aStudent.Email + " " + aStudent.Name);
            }
            Console.ReadKey();
        }
    }
}
