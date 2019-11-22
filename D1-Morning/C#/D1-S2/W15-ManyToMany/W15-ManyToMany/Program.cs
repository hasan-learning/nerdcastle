using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace W15_ManyToMany
{
    class Program
    {
        static void Main(string[] args)
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

            Course course1 = new Course("Programming Basics", 3.5);
            Course course2 = new Course("Java Basics", 3.5);
            dept1.CourseList.Add(course1);
            dept1.CourseList.Add(course1);

            Enrollment enr1 = new Enrollment(student2, course1, new DateTime(2019, 10, 17));
            Enrollment enr2 = new Enrollment(student1, course2, new DateTime(2019, 10, 13));
            Enrollment enr3 = new Enrollment(student3, course2, new DateTime(2019, 10, 25));

            dept1.EnrollmentList.Add(enr1);
            dept1.EnrollmentList.Add(enr2);
            dept1.EnrollmentList.Add(enr3);

            foreach (Enrollment anEnr in dept1.EnrollmentList)
            {
                Console.WriteLine(anEnr.Student.Name + " " + anEnr.Course.Title + " " + anEnr.EnrollmentDate.ToLongDateString());
            }
            Console.ReadKey();


        }
    }
}
