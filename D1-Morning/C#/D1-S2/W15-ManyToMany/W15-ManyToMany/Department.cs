using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace W15_ManyToMany
{
    public class Department
    {
        public string Code { set; get; }
        public string Name { set; get; }

        public List<Student> StudentList;
        public List<Course> CourseList;
        public List<Enrollment> EnrollmentList;
        public Department()
        {
            StudentList = new List<Student>();
            CourseList = new List<Course>();
            EnrollmentList = new List<Enrollment>();
        }
        public Department(string code, string name) : this()
        {
            Code = code;
            Name = name;
        }
    }
}
