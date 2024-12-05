import "@/styles/globals.css"
import { Inter } from "next/font/google"
import { ClerkProvider } from "@clerk/nextjs"
import { Navbar } from "@/components/navbar"
import { Footer } from "@/components/footer"

const inter = Inter({ subsets: ["latin"] })

export const metadata = {
  title: "ChitraKar - Art Without Limits",
  description: "When words fail, Art speaks",
}

export default function RootLayout({
  children,
}: {
  children: React.ReactNode
}) {
  return (
    <ClerkProvider
      appearance={{
        variables: {
          colorPrimary: "#4C1D95",
          colorBackground: "#ffffff",
          colorInputBackground: "#ffffff",
          colorInputText: "#000000",
          colorTextSecondary: "#666666"
        },
        elements: {
          formButtonPrimary: "bg-purple-900 hover:bg-purple-800",
          card: "bg-white",
          headerTitle: "text-purple-900",
          headerSubtitle: "text-gray-600",
          socialButtonsBlockButton: "bg-white border border-gray-200",
          formFieldInput: "bg-white border-gray-200"
        }
      }}
    >
      <html lang="en">
        <body className={inter.className}>
          <div className="flex flex-col min-h-screen">
            <Navbar />
            <main className="flex-grow">
              {children}
            </main>
            <Footer />
          </div>
        </body>
      </html>
    </ClerkProvider>
  )
}
