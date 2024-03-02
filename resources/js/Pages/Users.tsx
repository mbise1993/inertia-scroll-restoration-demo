import { Head, Link } from '@inertiajs/react'
import Layout from '../Components/Layout'

const Users = ({ users }) => {
  return (
    <>
      <Head title="Users" />
      <h1 className="text-3xl">Users</h1>
      <div className="mt-6 w-full max-w-2xl overflow-hidden rounded border shadow-sm">
        <table className="w-full text-left">
          <thead>
            <tr>
              <th className="px-4 py-6">Id</th>
              <th className="px-4 py-6">Name</th>
              <th className="px-4 py-6">Email</th>
              <th className="px-4 py-6">View</th>
            </tr>
          </thead>
          <tbody>
            {users.map((user) => (
              <tr key={user.id} className="border-t">
                <td className="px-4 py-6">{user.id}</td>
                <td className="px-4 py-6">{user.name}</td>
                <td className="px-4 py-6">{user.email}</td>
                <td className="px-4 py-6">
                  <Link href={`/user/${user.id}`} className="text-blue-700 underline">
                    View
                  </Link>
                </td>
              </tr>
            ))}
          </tbody>
        </table>
      </div>
    </>
  )
}

Users.layout = (page) => <Layout children={page} />

export default Users
